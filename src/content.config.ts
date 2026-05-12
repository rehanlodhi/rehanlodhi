import { defineCollection, z } from 'astro:content';
import { glob, file } from 'astro/loaders';

const projects = defineCollection({
  loader: glob({ pattern: '**/*.json', base: './src/content/projects' }),
  schema: z.object({
    number: z.string(),
    category: z.string(),
    name: z.string(),
    description: z.string(),
    stack: z.array(z.string()),
    linkLabel: z.string(),
    url: z.string().url(),
    featured: z.boolean().default(false),
    order: z.number(),
  }),
});

const posts = defineCollection({
  loader: glob({ pattern: '**/*.md', base: './src/content/posts' }),
  schema: z.object({
    title: z.string(),
    excerpt: z.string(),
    date: z.string(),
    category: z.string(),
    wpId: z.number().optional(),
  }),
});

export const collections = { projects, posts };
